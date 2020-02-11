import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { IonicModule } from '@ionic/angular';
import { PerfilProfPageRoutingModule } from './perfil-prof-routing.module';
import { PerfilProfPage } from './perfil-prof.page';
import { RouterModule } from '@angular/router';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    RouterModule.forChild([{ path: '', component: PerfilProfPage }]),
    PerfilProfPageRoutingModule
  ],
  declarations: [PerfilProfPage]
})
export class PerfilProfPageModule {}
