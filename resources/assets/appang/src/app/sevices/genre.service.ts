import { Injectable } from '@angular/core';
import { Genre } from '../models/service';
import { HttpClient } from '@angular/common/http';

@Injectable()

export class GenreService {

  public genres: Genre[] = [];

  constructor(private http: HttpClient) {
    console.log(this.http.get("http://localhost:8001/api/genre/"));

    this.http.get("http://localhost:8001/api/genre/").subscribe(
      (vetor: any[]) => {    
        for(let i of vetor){
            this.genres.push(
                new Genre(i.id, i.name)
            );
          }
        }
      )
    }
}