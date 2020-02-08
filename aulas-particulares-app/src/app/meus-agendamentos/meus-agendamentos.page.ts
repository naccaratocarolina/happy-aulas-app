import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AgendamentoService } from '../services/agendamento.service';

@Component({
  selector: 'app-meus-agendamentos',
  templateUrl: './meus-agendamentos.page.html',
  styleUrls: ['./meus-agendamentos.page.scss'],
})
export class MeusAgendamentosPage implements OnInit {
  agendamentos = [
    {
    id: 1,
    nome_professor: "Nome do Professor",
    materia: "Matéria",
    local: "Local",
    data: "XX/XX/XXXX",
    hora: "XX:XX"
    },
  ];
  cardSelecionado = -1;
  podeDeletar:boolean = true;


  constructor(private router: Router, public agendamentoService: AgendamentoService) { }

  ngOnInit() {
    //lista os agendamentos
    this.agendamentoService.listSessions().subscribe(
      (res) => {
        console.log(res['message']);
      }
    );
  }

  //redireciona pro perfil
  redirecionaPerfil() {
  this.router.navigateByUrl('/tabs/tab3');
  }

  //seleciona o agendamento i
  agendamentoSelecionado(i) {
    this.cardSelecionado = i;
  }

  //deleta o agendamento i (DEL)
  deletaAgendamento(i) {
    this.agendamentoService.deleteSession(this.agendamentos[i].id).subscribe(
      (res) => {
        console.log(res['message']);
        this.agendamentos.splice(i, 1);
      }
    );
  }

}
