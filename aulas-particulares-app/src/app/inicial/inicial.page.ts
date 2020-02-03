import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

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

  constructor(private router: Router) { }

  redirecionaLogin() {
    this.router.navigateByUrl('/login');
  }

  redirecionaCadastro() {
    this.router.navigateByUrl('/cadastro');
  }

  ngOnInit() {
  }

}
