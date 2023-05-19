<?php

// Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.

if (!function_exists('generatePassword')) {
  function generatePassword($length) {
      // Caratteri validi per la password
      $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';

      $password = '';
      $characterCount = strlen($characters);

      // Genera una password casuale
      for ($i = 0; $i < $length; $i++) {
          $randomIndex = mt_rand(0, $characterCount - 1);
          $password .= $characters[$randomIndex];
      }

      return $password;
  }


}