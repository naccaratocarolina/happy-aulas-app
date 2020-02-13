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
  public user = {};
  public profId:number;
  public teacher_id = localStorage.getItem('idTeacher');
  public teacher_user_id = localStorage.getItem('UserIdTeacher');


  constructor(private route: Router, private router: ActivatedRoute, public professorService: ProfessorService) {
    this.profId = this.router.snapshot.params["profId"];
  }

  ngOnInit() {
    //pega o professor
    this.professorService.findTeacher(this.teacher_id).subscribe(
      (res) => {
        console.log(res[0]);
        this.professor = res[0];
      });

    //pega o user_id do professor
    this.professorService.findUserTeacher(this.teacher_user_id).subscribe(
        (res) => {
          console.log(res[0]);
          this.user = res[0];
      });

    }
  // ionViewWillEnter(){
  //   this.professorService.findUserTeacher(this.teacher_user_id).subscribe(
  //       (res) => {
  //         console.log(res[0]);
  //         this.user = res[0];
  //     });
  

  redirecionaCriarAgendamentos() {
    this.route.navigateByUrl('/tabs/tab2'); //redireciona pra pag de criar um agendamento
  }

}
