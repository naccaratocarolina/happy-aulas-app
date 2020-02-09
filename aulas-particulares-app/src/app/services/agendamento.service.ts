import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class AgendamentoService {
  apiUrl: string = "http://localhost:8000/";

  httpHeaders: any = {
    headers: {
      'Content-Type': 'application/json',
      'Accept': 'application/json',
      'Authorization': 'Bearer '
    }
  }
  constructor( public http: HttpClient ) { }

  AgendaAula( form ): Observable<any> {
    //this.httpHeaders.headers["Authorization"] = "Bearer " + localStorage.getItem('userToken');
    return this.http.post( this.apiUrl + 'createclass', form, this.httpHeaders );
  }
}
