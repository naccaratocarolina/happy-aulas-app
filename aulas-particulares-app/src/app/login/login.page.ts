import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {
	/** Classes **/
	public useLogin_Img: boolean = true;

	public useTitulo: boolean = true;
	public useSubtitulo: boolean = true;

	public useContainerFormUser: boolean = true;
	public useContainerFormSenha: boolean = true;	

	public useFormUser: boolean = true;
	public useFormSenha: boolean = true;

	private useContainerBotoes_Tab1: boolean = true;
	private useBotoes_Tab1: boolean = true;

	constructor(private router: Router) { }

  	redirecionaTab1() {
    	this.router.navigateByUrl('/tabs/tab1');
 	}

	ngOnInit() { }

}
