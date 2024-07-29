import { Component } from '@angular/core';
import { DataService, Note } from '../services/data.service';
import { AlertController } from '@ionic/angular';

@Component({
  selector: 'app-prioritize',
  templateUrl: 'prioritize.page.html',
  styleUrls: ['prioritize.page.scss']
})
export class PrioritizePage {
  prioritizeNotes: Note[] = [];

  constructor(private dataService: DataService, private alertCtrl: AlertController) {}

  ngOnInit() {
    this.dataService.getPrioritize().subscribe(res => {
      this.prioritizeNotes = res;
    });
  }

  async removeFromPrioritize(note: Note) {
    const confirmation = await this.alertCtrl.create({
      header: 'Confirmation',
      message: 'Are you sure you want to remove this task from prioritize?',
      buttons: [
        {
          text: 'Cancel',
          role: 'cancel'
        },
        {
          text: 'Yes',
          handler: () => {
            // Remove the task from the prioritizeNotes array
            const index = this.prioritizeNotes.indexOf(note);
            if (index !== -1) {
              this.prioritizeNotes.splice(index, 1);
            }

            // Delete the task from the prioritize database
            this.dataService.deletePrioritize(note);
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
