import { Component, Input, OnInit } from '@angular/core';
import { Note, DataService } from '../services/data.service';
import { ModalController, ToastController, AlertController } from '@ionic/angular';

@Component({
  selector: 'app-modal',
  templateUrl: './modal.page.html',
  styleUrls: ['./modal.page.scss'],
})
export class ModalPage implements OnInit {
  @Input() id!: string;
  note!: Note;

  constructor(
    private dataService: DataService,
    private modalCtrl: ModalController,
    private toastCtrl: ToastController,
    private alertCtrl: AlertController
  ) { }

  ngOnInit() {
    this.dataService.getNoteById(this.id).subscribe(res => {
      this.note = res;
    });
  }

  async dismissModal() {
    await this.modalCtrl.dismiss();
  }

  async deleteNote() {
    if (this.note) {
      const confirmation = await this.alertCtrl.create({
        header: 'Confirm Deletion',
        message: `Are you sure you want to delete the note '${this.note.title}'?`,
        buttons: [
          {
            text: 'Cancel',
            role: 'cancel'
          },
          {
            text: 'Delete',
            handler: async () => {
              await this.dataService.deleteNote(this.note);
              this.modalCtrl.dismiss();
            }
          }
        ]
      });

      await confirmation.present();
    } else {
      console.log("Note is null. Cannot delete.");
    }
  }

  async updateNote() {
    if (this.note) {
      // Convert the string values of startTime and endTime to Date objects
      this.note.startTime = new Date(this.note.startTime);
      this.note.endTime = new Date(this.note.endTime);
  
      // Update the note in the database
      await this.dataService.updateNote(this.note);
  
      // Show the update success toast
      const toast = await this.toastCtrl.create({
        message: 'Note updated!',
        duration: 2000
      });
      toast.present();
  
      // Dismiss the modal
      this.modalCtrl.dismiss();
    } else {
      console.log("Note is null. Cannot update.");
    }
  }
  
}
