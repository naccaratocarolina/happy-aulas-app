import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ActivatedRoute } from '@angular/router';
import { ProfessorService } from '../services/professor.service';


@Component({
  selector: 'app-perfil-prof',
  templateUrl: './perfil-prof.page.html',
  styleUrls: ['./perfil-prof.page.scss'],
})
export class PerfilProfPage implements OnInit {
  public professor = {};
  public profId:number;

  constructor(private route: Router, private router: ActivatedRoute, public professorService: ProfessorService) {
    this.profId = this.router.snapshot.params["profId"];
  }

  ngOnInit() {
    //pega a materia i
    this.professorService.findTeacher(this.profId).subscribe(
      (res) => {
        console.log(res[0]);
        this.professor = res[0];
      }
    );
  }

  redirecionaCriarAgendamentos() {
    this.route.navigateByUrl('/tabs/tab2'); //redireciona pra pag de criar um agendamento
  }

}
