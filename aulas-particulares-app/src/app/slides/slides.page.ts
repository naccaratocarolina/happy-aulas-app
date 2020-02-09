import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-slides',
  templateUrl: './slides.page.html',
  styleUrls: ['./slides.page.scss'],
})
export class SlidesPage implements OnInit {

  slides = [
    {
      imagem: '../assets/slides/slider_imagem_1.png',
      texto: 'AGENDE AULAS PRÓXIMAS À VOCÊ EM UM SÓ CLIQUE',
      continue: false
    },
    {
      imagem: '../assets/slides/slider_imagem_2.png',
      texto: 'GRANDE VARIEDADE DE MATÉRIAS DISPONÍVEIS',
      continue: false
    },
    {
      imagem: '../assets/slides/slider_imagem_3.png',
      texto: 'ENCONTRE OS MELHORES PROFESSORES DO MERCADO',
      continue: true
    }
  ];

  constructor( private router: Router ) { }

  ngOnInit() {
  }

  redirecionaInicio() {
    	this.router.navigateByUrl('/inicial');
 	}

}
