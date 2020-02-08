import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-meus-agendamentos',
  templateUrl: './meus-agendamentos.page.html',
  styleUrls: ['./meus-agendamentos.page.scss'],
})
export class MeusAgendamentosPage implements OnInit {
  arrayAgendamentos = [
    {
    id: 1,
    nome_professor: "Nome do Professor",
    materia: "Matéria",
    local: "Local",
    data: "XX/XX/XXXX",
    hora: "XX:XX"
    },
    {
    id: 2,
    nome_professor: "Jorge",
    materia: "Calculo",
    local: "Zona Norte",
    data: "7/02/2020",
    hora: "22:52"
    },
    {
    id: 3,
    nome_professor: "Maria",
    materia: "Física",
    local: "Zona Sul",
    data: "7/02/2020",
    hora: "23:01"
    },
  ]

  constructor(private router: Router) { }

  ngOnInit() {
  }

  redirecionaPerfil() {
  this.router.navigateByUrl('/tabs/tab3'); //redireciona pro perfil
  }
}
