import { Injectable } from '@angular/core';
import { CanActivate, ActivatedRouteSnapshot, RouterStateSnapshot, UrlTree } from '@angular/router';
import { Observable } from 'rxjs';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class AuthGuard implements CanActivate {

  constructor(private router: Router) { }

  canActivate():Observable<boolean> | Promise<boolean> | boolean {
  	/**
  	return this.router.navigateByUrl('/inicial');
  	**/
  	return this.router.navigate(['tabs/tab1']);
  }

}
