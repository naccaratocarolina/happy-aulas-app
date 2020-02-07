import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';

@Component({
  selector: 'app-cadastro-professor',
  templateUrl: './cadastro-professor.page.html',
  styleUrls: ['./cadastro-professor.page.scss'],
})
export class CadastroProfessorPage implements OnInit {

  registerForm: FormGroup;

  constructor(private router: Router, public formbuilder: FormBuilder) {
    this.registerForm = this.formbuilder.group({
      nome: [null, [Validators.required]],
      materia: [null, [Validators.required]],
      bio: [null, [Validators.required]]
    });
  }

  ngOnInit() {
  }


submitForm(form) {
  console.log(form);
  console.log(form.value);

  this.router.navigateByUrl('/tabs/tab1'); //redireciona pra home
}

redirecionaPerfil() {
  this.router.navigateByUrl('/tabs/tab3'); //redireciona pro perfil
}

}
