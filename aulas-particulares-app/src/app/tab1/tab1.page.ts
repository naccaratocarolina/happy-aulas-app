import { Component } from '@angular/core';

@Component({
  selector: 'app-tab1',
  templateUrl: 'tab1.page.html',
  styleUrls: ['tab1.page.scss']
})
export class Tab1Page {
    /** Objeto materias **/
  arrayMaterias = [
    {
      nome: 'CALCULO',
      imagem: '../assets/tab1/img_calc.png',
      url: '/calculo'
    },
    {
      nome: 'FISICA',
      imagem: '../assets/tab1/img_fisica.png',
      url: '/fisica'
    },
    {
      nome: 'PROGRAMAÇÃO',
      imagem: '../assets/tab1/img_prog.png',
      url: '/programacao'
    },
    {
      nome: 'ROBÓTICA',
      imagem: '../assets/tab1/img_rob.png',
      url: '/programacao'
    },
    {
      nome: 'MECÂNICA',
      imagem: '../assets/tab1/img_mec.png',
      url: '/mecanica'
    },
    {
      nome: 'ELÉTRICA',
      imagem: '../assets/tab1/img_eletrica.png',
      url: '/eletrica'
    },
    {
      nome: 'TERMODIÂNICA',
      imagem: '../assets/tab1/img_termo.png',
      url: '/termodinamica'
    },
    {
      nome: 'MATERIAIS',
      imagem: '../assets/tab1/img_cie_mat.png',
      url: '/materiais'
    },
    {
      nome: 'ELETROMAGNETISMO',
      imagem: '../assets/tab1/img_eletromag.png',
      url: '/eletromag'
    },
    {
      nome: 'BOTÂNICA',
      imagem: '../assets/tab1/img_botanica.png',
      url: '/botanica'
    },
    {
      nome: 'QUIMICA',
      imagem: '../assets/tab1/img_quimica.png',
      url: '/quimica'
    },
    {
      nome: 'BIOLOGIA',
      imagem: '../assets/tab1/img_bio.png',
      url: '/biologia'
    },
    {
      nome: 'MICROBIOLOGIA',
      imagem: '../assets/tab1/img_microbio.png',
      url: '/biologia'
    },
    {
      nome: 'GENÉTICA',
      imagem: '../assets/tab1/img_genetica.png',
      url: '/genetica'
    },
    {
      nome: 'HISTÓRIA',
      imagem: '../assets/tab1/img_historia.png',
      url: '/historia'
    },
    {
      nome: 'GEOGRAFIA',
      imagem: '../assets/tab1/img_geo.png',
      url: '/geografia'
    },
    {
      nome: 'ARTES',
      imagem: '../assets/tab1/img_artes.png',
      url: '/geografia'
    },
    {
      nome: 'FOTOGRAFIA',
      imagem: '../assets/tab1/img_fotografia.png',
      url: '/geografia'
    },
  ]

  /** Classes **/
  public useCardInfo: boolean = true;
  public useCardMensagem: boolean = true;
  public useContainerImgCard: boolean = true;

  public useCardPesquisa: boolean = true;

  public useContainerMaterias: boolean = true;
  public useMateriasConfig: boolean = true;

  constructor() {}

}
