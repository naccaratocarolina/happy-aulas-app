import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ReactiveFormsModule } from '@angular/forms';
import { IonicModule } from '@ionic/angular';
import { CadastroProfessorPageRoutingModule } from './cadastro-professor-routing.module';
import { CadastroProfessorPage } from './cadastro-professor.page';

@NgModule({
  imports: [
    CommonModule,
    ReactiveFormsModule,
    IonicModule,
    CadastroProfessorPageRoutingModule
  ],
  declarations: [CadastroProfessorPage]
})
export class CadastroProfessorPageModule {}
