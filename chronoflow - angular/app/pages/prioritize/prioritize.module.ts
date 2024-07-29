import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { PrioritizePageRoutingModule } from './prioritize-routing.module';

import { PrioritizePage } from './prioritize.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    PrioritizePageRoutingModule
  ],
  declarations: [PrioritizePage]
})
export class PrioritizePageModule {}
