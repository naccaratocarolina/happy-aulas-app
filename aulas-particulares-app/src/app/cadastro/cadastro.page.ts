import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';

@Component({
  selector: 'app-cadastro',
  templateUrl: './cadastro.page.html',
  styleUrls: ['./cadastro.page.scss'],
})
export class CadastroPage implements OnInit {
  private passwordError:boolean;

  /** Formulario */
  registerForm: FormGroup;

  constructor(public formbuilder: FormBuilder) {
    this.registerForm = this.formbuilder.group({
      nome: [null, [Validators.required]],
      email: [null, [Validators.required, Validators.email]],
      password: [null, [Validators.required, Validators.minLength(6)]],
      password_check: [null, [Validators.required, Validators.minLength(6)]],
    });
   }

      submitForm(form){
        console.log(form);
        console.log(form.value);
      }

  ngOnInit() {
  }

  checkPassword(form) {
    if(form.value.password != form.value.password_check) {
      this.passwordError = true;
    } else {
      this.passwordError = false;
    }
  }

}
