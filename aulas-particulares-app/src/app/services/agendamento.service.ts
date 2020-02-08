import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class AgendamentoService {

  //URL da api
  apiUrl:string = 'http://localhost:8000/api/'

  //header do request
  httpHeaders: object = {
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json',
    'Authorization': 'Bearer '
  }
}

  constructor( public http: HttpClient) { }

  //pega todos os agendamentos (GET)
  listSessions(): Observable<any> {
    this.httpHeaders['headers']["Authorization"] = 'Bearer' + localStorage.getItem('userToken');

    return this.http.get(this.apiUrl + 'listsessions', this.httpHeaders);
  }

  //deleta o agendamento i (DEL)
  deleteSession(id:number): Observable<any> {
    this.httpHeaders['headers']["Authorization"] = 'Bearer ' + localStorage.getItem('userToken');
    console.log(this.httpHeaders['headers']);

    return this.http.delete(this.apiUrl + 'deletesession/' + id, this.httpHeaders);
  }
}
