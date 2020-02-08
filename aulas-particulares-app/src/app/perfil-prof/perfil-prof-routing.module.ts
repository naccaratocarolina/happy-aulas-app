import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { PerfilProfPage } from './perfil-prof.page';

const routes: Routes = [
  {
    path: '',
    component: PerfilProfPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class PerfilProfPageRoutingModule {}
