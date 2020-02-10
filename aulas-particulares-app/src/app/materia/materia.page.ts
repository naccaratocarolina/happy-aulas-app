import { Component, OnInit } from '@angular/core';

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
    {
      nome:'Clayton',
      materia: 'Calculo'
    }
  ];

  constructor() { }

  ngOnInit() {
  }

}
