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
  public ionViewWillEnter() {
    this.materiaService.listSubjects().subscribe(
      (res) => {
        console.log(res);
        this.materias = res;
      }
    );
  }

  public ionViewWillLeave () {
    this.materias = [];
  }

  //redireciona pra pag da materia e passa o id do card selecionado
  public redirecionaPagMateria(i) {
    localStorage.setItem( 'idMateria', i)
    this.router.navigate(['/tabs/materia', {materiaId: i}]);
  }
}
