<?php
declare(strict_types=1);
function e(?string $value): string { return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function current_path(): string { return rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/') ?: '/'; }
function nav_link(string $path, string $label): string {
  $active = current_path() === $path ? ' aria-current="page"' : '';
  return '<a href="' . e($path) . '"' . $active . '>' . e($label) . '</a>';
}
function publications(): array {
 return [
  ['title'=>'Time to toughen up the sexual harassment act','publication'=>'GroundUp','date'=>'30 August 2017','topic'=>'Gender justice','credit'=>'Sole-authored','summary'=>'Commentary on strengthening legal responses to sexual harassment.','url'=>'https://groundup.org.za/article/time-toughen-sexual-harassment-act/'],
  ['title'=>'Endless court postponements deny justice to poor people','publication'=>'GroundUp','date'=>'29 June 2022','topic'=>'Access to justice','credit'=>'Co-authored with Sithuthukile Mkhize','summary'=>'How repeated court postponements can undermine access to justice for people with limited resources.','url'=>'https://groundup.org.za/article/endless-court-postponements-deny-poor-people-justice/'],
  ['title'=>'Hold officials personally liable to strengthen our democracy','publication'=>'GroundUp','date'=>'30 May 2024','topic'=>'Public accountability','credit'=>'Co-authored with Thuto Gabaphethe','summary'=>'An argument for strengthening democratic accountability through personal liability where appropriate.','url'=>'https://groundup.org.za/article/holding-elected-and-administrative-officials-personally-liable-would-strengthen-our-democracy/'],
  ['title'=>'Joburg’s temporary emergency accommodation policy a misstep','publication'=>'GroundUp','date'=>'30 September 2024','topic'=>'Housing rights','credit'=>'Co-authored with Thuto Gabaphethe','summary'=>'Commentary on Johannesburg’s approach to temporary emergency accommodation and housing rights.','url'=>'https://groundup.org.za/article/joburgs-temporary-emergency-accommodation-policy-a-misstep/'],
 ];
}
