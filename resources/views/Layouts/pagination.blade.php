<?php
// config
$link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>

<div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">
    @if ($paginator->lastPage() > 1)
    <ul class="pagination-p">
        <li class="pagination-item--wide first {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a class="pagination-link--wide first {{ $paginator->url(1) }}" href="#">Previous</a> </li>

        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <?php
            $half_total_links = floor($link_limit / 2);
            $from = $paginator->currentPage() - $half_total_links;
            $to = $paginator->currentPage() + $half_total_links;
            if ($paginator->currentPage() < $half_total_links) {
                $to += $half_total_links - $paginator->currentPage();
            }
            if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
            }
            ?>
                @if ($from < $i && $i < $to)
                    <li class="pagination-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                        <a href="pagination-link {{ $paginator->url($i) }}">{{ $i }}</a>
                    </li>
                @endif
        @endfor

        <li class="pagination-item--wide last {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a href="pagination-link--wide last {{ $paginator->url($paginator->currentPage()+1) }}" >Next</a>
        </li>
    </ul>
    @endif
</div>