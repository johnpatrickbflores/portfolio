import { Component } from '@angular/core';
import { DataService, Note } from '../services/data.service';
import { AlertController } from '@ionic/angular';

@Component({
  selector: 'app-done',
  templateUrl: 'done.page.html',
  styleUrls: ['done.page.scss']
})
export class DonePage {
  doneNotes: Note[] = [];

  constructor(private dataService: DataService, private alertCtrl: AlertController) {}

  ionViewDidEnter() {
    this.dataService.getDoneNotes().subscribe(res => {
      this.doneNotes = res;
    });
  }

  async removeDoneNote(doneNote: Note) {
    const confirmation = await this.alertCtrl.create({
      header: 'Confirmation',
      message: 'Are you sure you want to remove this task?',
      buttons: [
        {
          text: 'Cancel',
          role: 'cancel'
        },
        {
          text: 'Yes',
          handler: () => {
            // Remove the task from the doneNotes array
            const index = this.doneNotes.indexOf(doneNote);
            if (index !== -1) {
              this.doneNotes.splice(index, 1);
            }

            // Delete the task from the done database
            this.dataService.deleteDone(doneNote);
          }
        }
      ]
    });

    await confirmation.present();
  }
}

