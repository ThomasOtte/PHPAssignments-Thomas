<?php
namespace part1;

function output() {

	echo 'Hello ';
}

namespace part1\Sub\subspace;

function output2() {

	echo 'World';
}

namespace part2;

function output() {

	echo 'World';
}
\part1\output();
\part1\Sub\subspace\output2();