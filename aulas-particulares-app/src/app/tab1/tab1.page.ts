import { Component } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-tab1',
  templateUrl: 'tab1.page.html',
  styleUrls: ['tab1.page.scss']
})
export class Tab1Page {
  /** Objeto materias **/
  public materias = [
    {
      nome: 'CALCULO',
      imagem: '../assets/tab1/img_calc.png'
    },
    {
      nome: 'FISICA',
      imagem: '../assets/tab1/img_fisica.png'
    },
    {
      nome: 'PROGRAMAÇÃO',
      imagem: '../assets/tab1/img_prog.png'
    },
    {
      nome: 'ROBÓTICA',
      imagem: '../assets/tab1/img_rob.png'
    },
    {
      nome: 'MECÂNICA',
      imagem: '../assets/tab1/img_mec.png'
    },
    {
      nome: 'ELÉTRICA',
      imagem: '../assets/tab1/img_eletrica.png'
    },
    {
      nome: 'TERMODIÂNICA',
      imagem: '../assets/tab1/img_termo.png'
    },
    {
      nome: 'ELETROMAGNETISMO',
      imagem: '../assets/tab1/img_eletromag.png'
    },
    {
      nome: 'BOTÂNICA',
      imagem: '../assets/tab1/img_botanica.png'
    },
    {
      nome: 'QUIMICA',
      imagem: '../assets/tab1/img_quimica.png'
    },
    {
      nome: 'BIOLOGIA',
      imagem: '../assets/tab1/img_bio.png'
    },
    {
      nome: 'GENÉTICA',
      imagem: '../assets/tab1/img_genetica.png'
    },
  ]

  constructor(private router: Router) {}

  redirecionaMateria(i){
    this.router.navigate(['/materia', {profId: this.data[i]}]);
  }
}
