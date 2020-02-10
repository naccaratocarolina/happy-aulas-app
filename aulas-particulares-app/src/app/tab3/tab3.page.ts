import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from '../services/auth.service';

@Component({
  selector: 'app-tab3',
  templateUrl: 'tab3.page.html',
  styleUrls: ['tab3.page.scss']
})
export class Tab3Page {  

  //variaveis criadas
  id;
  usuario;

  constructor(private router: Router, public authService: AuthService) {}

  ngOnInit(){
    this.pegaUsuario();
  }

  // função que pega o nome do usuario cadastrado e faz aparecer na pag de perfil
  pegaUsuario(): void{
    this.authService.pegaUsuario(this.id).subscribe(
      (res) => {
        console.log(res);
        this.usuario = res;
      }, (error) => {
        console.log(error);
      }
    )
  }

  redirecionaCadastroProf() {
    this.router.navigateByUrl('/cadastro-professor');
  }
}
