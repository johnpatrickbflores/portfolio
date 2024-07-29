import { Component, OnInit } from '@angular/core';
import { AlertController, ModalController } from '@ionic/angular';
import { DataService, Note } from '../services/data.service';
import { ModalPage } from '../modal/modal.page';
import { LocalNotifications } from '@capacitor/local-notifications';
@Component({
  selector: 'app-tasks',
  templateUrl: 'tasks.page.html',
  styleUrls: ['tasks.page.scss']
})
export class TasksPage implements OnInit {
  notes: Note[] = [];

  constructor(
    private dataService: DataService,
    private alertCtrl: AlertController,
    private modalCtrl: ModalController
  ) {
    this.dataService.getNotes().subscribe(res => {
      this.notes = res;
    });
  }

  ngOnInit() {
  }

  async addNote() {
    const alert = await this.alertCtrl.create({
      header: 'Add Task',
      cssClass: 'custom-alert',
      inputs: [
        {
          name: 'title',
          placeholder: 'Task',
          type: 'text'
        },
        {
          name: 'description',
          placeholder: 'Description',
          type: 'textarea'
        },
        {
          name: 'startTime',
          type: 'datetime-local' // Use 'date' if you only want date input
        },
        {
          name: 'endTime',
          type: 'datetime-local' // Use 'date' if you only want date input
        }
      ],
      buttons: [
        {
          text: 'Cancel',
          role: 'cancel'
        },
        {
          text: 'Add',
          handler: async res => {
            // Create a new instance of the Note class and pass it to the addNote function
            const newNote: Note = {
              title: res.title,
              description: res.description,
              startTime: new Date(res.startTime), // Convert input string to Date object
              endTime: new Date(res.endTime)     // Convert input string to Date object
            };
            this.dataService.addNote(newNote);
  
            // Dismiss the alert after adding the note
            await alert.dismiss();
          }
        }
      ]
    });
  
    await alert.present();
  }
  

  async openNote(note: Note) {
    const modal = await this.modalCtrl.create({
      component: ModalPage,
      componentProps: { id: note.id },
    });

    await modal.present();
  }

  async markAsDone(note: Note) {
    const confirmation = await this.alertCtrl.create({
      header: 'Confirmation',
      message: 'Are you sure you want to mark this task as done?',
      buttons: [
        {
          text: 'Cancel',
          role: 'cancel'
        },
        {
          text: 'Yes',
          handler: async () => {
            console.log('Marking note as done:', note);
  
            // Find and remove the task from "notes" collection
            this.dataService.getNotes().subscribe(res => {
              const matchedNote = res.find(n => n.title === note.title);
              if (matchedNote) {
                this.dataService.deleteNote(matchedNote);
              }
            });
  
            // Find and remove the task from "prioritize" collection
            this.dataService.getPrioritize().subscribe(res => {
              const matchedPrioritizeNote = res.find(n => n.title === note.title);
              if (matchedPrioritizeNote) {
                this.dataService.deletePrioritize(matchedPrioritizeNote);
              }
            });
  
            // Add the task to the "done" collection in Firestore
            this.dataService.addDone(note);
  
            // Remove the task from the list since it is completed
            const index = this.notes.indexOf(note);
            if (index !== -1) {
              this.notes.splice(index, 1);
            }
          }
        }
      ]
    });
  
    await confirmation.present();
  }
  
  async prioritize(note: Note) {
    const confirmation = await this.alertCtrl.create({
      header: 'Confirmation',
      message: 'Are you sure you want to prioritize this task?',
      buttons: [
        {
          text: 'Cancel',
          role: 'cancel'
        },
        {
          text: 'Yes',
          handler: () => {
            console.log('Prioritizing note:', note);
  
            // Move the task from "notes" collection to "prioritize" collection in Firestore
            this.dataService.addPrioritize(note);
  
            // Note: Do not remove the task from "this.notes" array
          }
        }
      ]
    });
  
    await confirmation.present();
  }
  
  formatFirestoreDate(timestamp: any): Date {
    return new Date(timestamp.seconds * 1000); // Convert seconds to milliseconds
  }

  formatFirestoreTime(timestamp: any): Date {
    return new Date(timestamp.seconds * 1000); // Convert seconds to milliseconds
  }
  
}
