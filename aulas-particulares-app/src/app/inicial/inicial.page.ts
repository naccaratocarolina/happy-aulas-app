import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-inicial',
  templateUrl: './inicial.page.html',
  styleUrls: ['./inicial.page.scss'],
})
export class InicialPage implements OnInit {
	/** Classes **/
	public useBotoes:boolean = true;
	public useBotoes_Entrar:boolean = true;
	public useBotoes_Cadastrar:boolean = true;

	public useLogo_Style:boolean = true;

  constructor() { }

  ngOnInit() {
  }

}
