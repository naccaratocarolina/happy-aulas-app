import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { PerfilProfPageRoutingModule } from './perfil-prof-routing.module';

import { PerfilProfPage } from './perfil-prof.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    PerfilProfPageRoutingModule
  ],
  declarations: [PerfilProfPage]
})
export class PerfilProfPageModule {}
