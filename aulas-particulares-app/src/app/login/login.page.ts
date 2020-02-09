import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { AuthService } from "../services/auth.service";

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {
	private loginForm: FormGroup;
	private cor:boolean;
	public useCorMensagem:boolean = true;

	constructor(private router: Router, public formbuilder: FormBuilder, public authService: AuthService) {

		this.loginForm = this.formbuilder.group({
			email: [null, [Validators.required, Validators.email]],
			password: [null, [Validators.required, Validators.minLength(6)]]
		});
	}


  redirecionaCadastro() {
    	this.router.navigateByUrl('/cadastro');
 	}

 	// submitForm(form) {
 	// 	console.log(form);
 	// 	console.log(form.value);
  //
 	// 	this.router.navigateByUrl('/tabs/tab1'); //redireciona pra home
 	// }

 	corMensagem() {
 		if (this.loginForm.controls.email.invalid && this.loginForm.controls.email.touched && this.loginForm.controls.password.invalid && this.loginForm.controls.password.touched) {
 			return this.cor=true;
 		} else {
 			return this.cor=false
 		}
 	}
  loginUsuario ( loginForm ) {
    if( loginForm.status == "VALID" ){
      this.authService.loginUsuario( loginForm.value ).subscribe(
        (res) => {
          console.log (res);
          localStorage.setItem( 'userToken', res.token );
          this.router.navigate(['/tabs/tab1']);
        }
      );
    }
    }

	ngOnInit() { }

}
