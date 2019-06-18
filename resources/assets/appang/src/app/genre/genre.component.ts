import { Component, OnInit } from '@angular/core';
import { GenreService } from './genre.service';
import { Genre } from './genre';

@Component({
  selector: 'app-genre',
  templateUrl: './genre.component.html',
  styleUrls: ['./genre.component.css']
})
export class GenreComponent implements OnInit {

  //private genre: Genre[];

  public genres: Genre[] = [];

  constructor(public genreService: GenreService) { }

  ngOnInit() {
    this.genres = this.genreService.genres;
    console.log(this.genreService.genres);
  }

}
