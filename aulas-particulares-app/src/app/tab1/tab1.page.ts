import { Component } from '@angular/core';
import { Storage } from '@ionic/storage';
import { Router } from '@angular/router';
import { MateriaService } from '../services/materia.service';

@Component({
  selector: 'app-tab1',
  templateUrl: 'tab1.page.html',
  styleUrls: ['tab1.page.scss']
})
export class Tab1Page {
  /** Objeto materias **/
   public NomeUsuario = localStorage.getItem('user_name')

  materias = [];
  cardSelecionado = -1;

  constructor(private router: Router, public materiaService: MateriaService) {}

  //lista as materias
  ionViewDidEnter() {
    this.materiaService.listSubjects().subscribe(
      (res) => {
        this.materias = res;
      }
    );
  }

  ionViewWillLeave () {
    this.materias = [];
  }

  //redireciona pra pag da materia e passa o id do card selecionado
  materiaSelecionada(i) {
    this.cardSelecionado = i;
    this.router.navigate(['/materia']);
  }



}
