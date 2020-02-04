import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-cadastro',
  templateUrl: './cadastro.page.html',
  styleUrls: ['./cadastro.page.scss'],
})
export class CadastroPage implements OnInit {
  /** Classes **/

  public useFundo: boolean = true;
  public useTitulo: boolean = true;

  public useInputConfig: boolean = true;

  constructor() { }

  ngOnInit() {
  }

}
