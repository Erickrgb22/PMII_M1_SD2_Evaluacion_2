<?php
function get_random_pokemon($url)
{
  $pokeRandom = rand(1, 1025);
  $result = file_get_contents($url . $pokeRandom);
  $data = json_decode($result, true);
  return $data;
}
