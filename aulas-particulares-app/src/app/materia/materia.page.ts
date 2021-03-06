import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ActivatedRoute } from '@angular/router';

import { MateriaService } from '../services/materia.service';
import { ProfessorService } from '../services/professor.service';

@Component({
  selector: 'app-materia',
  templateUrl: './materia.page.html',
  styleUrls: ['./materia.page.scss'],
})
export class MateriaPage implements OnInit {
  public materia = {};
  public subject_id = parseInt(localStorage.getItem('idMateria'));
  public professores = [];

  constructor(private route: Router, private router: ActivatedRoute, public materiaService: MateriaService, public professorService: ProfessorService) {
    this.subject_id = this.router.snapshot.params["materiaId"];
  }

  ngOnInit() {
    //pega a materia i
    this.materiaService.findSubject(this.subject_id).subscribe(
      (res) => {
        console.log(res);
        this.materia = res[0];
      });

    //lista professores
    this.professorService.listTeacher(this.subject_id).subscribe(
      (res) => {
        console.log(res);
        this.professores = res;
      }
    );
  }

  //redireciona pra pag do professor e passa o id do card selecionado
  public redirecionaPagProf(i, j) {
    localStorage.setItem('idTeacher', i);
    localStorage.setItem('UserIdTeacher', j);
    this.route.navigate(['/tabs/perfil-prof', {profId: i}]);
  }

}
