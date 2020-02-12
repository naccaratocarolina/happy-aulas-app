import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from '../services/auth.service';

@Component({
  selector: 'app-tab3',
  templateUrl: 'tab3.page.html',
  styleUrls: ['tab3.page.scss']
})
export class Tab3Page {
  public NomeUsuario = localStorage.getItem('user_name')
  public EmailUsuario = localStorage.getItem('user_email')


  //variaveis criadas
  id;
  usuario;

  constructor(private router: Router, public authService: AuthService) {}

  ngOnInit(){
    
  }

  redirecionaCadastroProf() {
    this.router.navigateByUrl('/cadastro-professor');
  }
}
