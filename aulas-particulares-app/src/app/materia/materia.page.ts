import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Tab1 } from '../tab1/tab1.page';

@Component({
  selector: 'app-materia',
  templateUrl: './materia.page.html',
  styleUrls: ['./materia.page.scss'],
})
export class MateriaPage implements OnInit {
  public professores = [
    {
      nome: 'Nome do Professor',
      materia: 'Matéria'
    },
  ];

  constructor(private router: Router) {
    //this.profId = this.router.snapshot.params["profId"];
  }

  ngOnInit() {
  }

}
