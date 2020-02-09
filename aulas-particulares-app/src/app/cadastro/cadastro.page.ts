import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { AuthService } from "../services/auth.service";


@Component({
  selector: 'app-cadastro',
  templateUrl: './cadastro.page.html',
  styleUrls: ['./cadastro.page.scss'],
})
export class CadastroPage implements OnInit {
  private passwordError:boolean;

  /** Formulario */
  registerForm: FormGroup;

  constructor(public router: Router, public formbuilder: FormBuilder, public authService: AuthService) {

    this.registerForm = this.formbuilder.group({
      name: ['', [Validators.required]],
      email: ['', [Validators.required, Validators.email]],
      password: ['', [Validators.required, Validators.minLength(6)]],
      c_password: ['', [Validators.required, Validators.minLength(6)]],
    });
   }

  ngOnInit() {
  }

  checkPassword(form) {
    if(form.value.password != form.value.c_password) {
      return this.passwordError = true;
    } else {
      return this.passwordError = false;
    }
  }

  //integração Cadastro
  registrarUsuario ( registerForm ) {
    if ( registerForm.status == "VALID"){

      this.authService.registrarUsuario( registerForm.value ).subscribe(
        ( res ) => {
            console.log( res );
            this.router.navigate(['/tabs/tab1']);
        }
      );
    }

    }

}
