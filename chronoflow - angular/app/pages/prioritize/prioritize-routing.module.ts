import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { PrioritizePage } from './prioritize.page';

const routes: Routes = [
  {
    path: '',
    component: PrioritizePage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class PrioritizePageRoutingModule {}
