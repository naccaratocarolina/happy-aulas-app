import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { AgendamentoService } from "../services/agendamento.service";

@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss']
})
export class Tab2Page {
	/** Formulario **/
	agendaForm: FormGroup;

  constructor(private router: Router, public formbuilder: FormBuilder, public agendamentoService: AgendamentoService) {
  	this.agendaForm = this.formbuilder.group({
			subject_name: ['', [Validators.required]],
			teacher_name: ['', [Validators.required]],
			location: ['', [Validators.required]],
			lesson_date: ['', [Validators.required]],
			lesson_time: ['', [Validators.required]]
	});
  }

  // AgendaAula ( agendaForm ) {
  //   if ( agendaForm.status == "VALID"){
  //     this.agendamentoService.AgendaAula( agendaForm.value ).subscribe(
  //       ( res ) => {
  //         console.log(res);
  //         this.router.navigate(['meus-agendamentos']);
  //       }
  //     );
  //   }
  CriaAula ( agendaForm ) {
    if ( agendaForm.status == "VALID"){
      this.agendamentoService.createLesson( agendaForm.value ).subscribe(
        ( res ) => {
          console.log(res);
          this.router.navigate(['meus-agendamentos']);
        }
      );
    }
  }

}
