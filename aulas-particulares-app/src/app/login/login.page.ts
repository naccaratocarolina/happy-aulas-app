import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {
	private registerForm: FormGroup;
	private cor:boolean;
	public useCorMensagem:boolean = true;

	constructor(private router: Router, public formbuilder: FormBuilder) {

		this.registerForm = this.formbuilder.group({
			email: [null, [Validators.required, Validators.email]],
			password: [null, [Validators.required, Validators.minLength(6)]]
		});
	}


  redirecionaCadastro() {
    	this.router.navigateByUrl('/cadastro');
 	}

	ngOnInit() { }

}
