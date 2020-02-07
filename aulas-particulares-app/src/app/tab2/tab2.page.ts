import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';

@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss']
})
export class Tab2Page {
	/** Formulario **/
	registerForm: FormGroup;

  constructor(private router: Router, public formbuilder: FormBuilder) {
  	this.registerForm = this.formbuilder.group({
			email: [null, [Validators.required, Validators.email]],
			materia: [null, [Validators.required]],
			professor: [null, [Validators.required]],
			local: [null, [Validators.required]],
			data: [null, [Validators.required]],
			horario: [null, [Validators.required]]
	});
  }

  submitForm(form) {
 		console.log(form);
 		console.log(form.value);

 		this.router.navigateByUrl('/tabs/tab1'); //redireciona pra home
  }

}
