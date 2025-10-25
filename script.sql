drop schema if exists prontuario_vet;
create schema prontuario_vet;
use prontuario_vet;

create table especie
(
	cd_especie int,
    nm_especie varchar(50),
    constraint pk_especie primary key(cd_especie)
);

create table animal
(
	cd_animal int,
    nm_animal varchar(100),
    cd_especie int,
    constraint pk_animal primary key (cd_animal),
    constraint fk_animal_especie foreign key (cd_especie)
		references especie(cd_especie)
);

create table tratamento
(
	cd_tratamento int,
    nm_tratamento varchar(100),
	ds_tratamento text,
    constraint pk_tratamento primary key (cd_tratamento)
);

create table prontuario
(
	cd_animal int,
    cd_tratamento int, 
    dt_tratamento datetime,
    ds_observacao text,
    constraint pk_prontuario primary key(cd_animal, cd_tratamento, dt_tratamento),
    constraint fk_prontuario_animal foreign key (cd_animal) 
		references animal(cd_animal),
    constraint fk_prontuario_tratamento foreign key(cd_tratamento) 
		references tratamento (cd_tratamento)
);

insert into especie (cd_especie, nm_especie) values (1, 'Buldog');
insert into especie (cd_especie, nm_especie) values (2, 'Dálmata');
insert into especie (cd_especie, nm_especie) values (3, 'Tabby Listrado');
insert into especie (cd_especie, nm_especie) values (4, 'Beagle');
insert into especie (cd_especie, nm_especie) values (5, 'Californiano');
insert into especie (cd_especie, nm_especie) values (6, 'Fox Paulistinha');

insert into animal values (1, 'Brutus', 1);
insert into animal values (2, 'Flocos', 2);
insert into animal values (3, 'Luna', 3);
insert into animal values (4, 'Meg', 4);
insert into animal values (5, 'Rico', 5);
insert into animal values (6, 'Tico', 6);


insert into tratamento values (101, 'Vacina Antirrábica', 'Proteção conta raiva');
insert into tratamento values (102, 'Vermifugação', 'Controle de vermes intestinais');
insert into tratamento values (103, 'Castração', 'Esterilização');

insert into prontuario values (1, 101, '2024-08-30 11:30:00', 'Renovar em 1 ano');
insert into prontuario values (1, 102, '2024-08-30 11:35:00', 'Houve reação alérgica');
insert into prontuario values (2, 101, '2024-09-02 16:30:00', null);
insert into prontuario values (2, 103, '2024-02-10', 'Demorou para voltar da anestesia');
insert into prontuario values (3, 102, '2024-03-01', null);


