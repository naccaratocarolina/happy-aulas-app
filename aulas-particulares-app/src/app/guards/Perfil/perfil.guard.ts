import { Injectable } from '@angular/core';
import { CanActivate, ActivatedRouteSnapshot, RouterStateSnapshot, UrlTree } from '@angular/router';
import { Observable } from 'rxjs';
import { AuthService } from "../../services/auth.service";
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class PerfilGuard implements CanActivate {

  constructor(public authService: AuthService, public router: Router){

  }
  canActivate(
    next: ActivatedRouteSnapshot,
    state: RouterStateSnapshot):Observable<boolean> | Promise<boolean> | boolean{
      if(this.authService.estaLogado() == null){
        return this.router.navigate(['login'])
    } else {
      return true;
    }
  }

}
