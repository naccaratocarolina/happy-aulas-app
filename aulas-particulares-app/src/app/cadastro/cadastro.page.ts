import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { ToastController } from "@ionic/angular";

@Component({
  selector: 'app-cadastro',
  templateUrl: './cadastro.page.html',
  styleUrls: ['./cadastro.page.scss'],
})
export class CadastroPage implements OnInit {
  private passwordError:boolean;

  /** Formulario */
  registerForm: FormGroup;

  constructor(public formbuilder: FormBuilder, private toastController: ToastController) {
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
      return this.passwordError = true;
    } else {
      return this.passwordError = false;
    }
  }

  async alertaSenha(passwordError) {
        const toast = await this.toastController.create({
          message: "Senhas não compatíveis!",
          duration: 5000
        });
        toast.present();
      }

}
