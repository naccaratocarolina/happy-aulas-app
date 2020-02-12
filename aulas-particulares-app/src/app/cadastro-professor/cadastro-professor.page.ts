import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { ProfessorService } from '../services/professor.service';

@Component({
  selector: 'app-cadastro-professor',
  templateUrl: './cadastro-professor.page.html',
  styleUrls: ['./cadastro-professor.page.scss'],
})
export class CadastroProfessorPage implements OnInit {

  registerForm: FormGroup;
  professores=[];

  constructor(private router: Router, public formbuilder: FormBuilder, public professorService: ProfessorService) {
    this.registerForm = this.formbuilder.group({
      nome: [null, [Validators.required]],
      //materia: [null, [Validators.required]],
      bio: [null, [Validators.required]]
    });
  }

  ngOnInit() {
  }

criaProfessor(formbuilder) {
  this.professorService.createTeacher(formbuilder).subscribe(
    (res) => {
      console.log(res);
      this.professores.push(res);
    }
  );
  this.router.navigateByUrl('/tabs/tab3'); //volta pra pag de perfil
}

redirecionaPerfil() {
  this.router.navigateByUrl('/tabs/tab3'); //redireciona pro perfil
}

}
