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
  public professores = [];

  constructor(private route: Router, private router: ActivatedRoute, public materiaService: MateriaService, public professorService: ProfessorService) {
    this.materiaId = this.router.snapshot.params["materiaId"];
  }

  ngOnInit(materiaId:number) {
    //pega a materia i
    this.materiaService.findSubject(this.materiaId).subscribe(
      (res) => {
        console.log(res[0]);
        this.materia = res[0];
      }
    );

    //lista professores
    this.professorService.listTeacher().subscribe(
      (res) => {
        console.log(res[0]);
        this.professores = res;
      }
    );
  }

  //redireciona pra pag do professor e passa o id do card selecionado
  public redirecionaPagProf(i) {
    this.route.navigate(['/perfil-prof', {profId: i}]);
  }

}
