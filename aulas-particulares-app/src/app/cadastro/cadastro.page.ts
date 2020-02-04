import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';

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
  public useStyleButton: boolean = true;

  /** formulario */
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

}
