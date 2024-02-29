<?php
// Assuming $counties is an array of associative arrays with 'county_code' and 'county_name'

// Sort the $counties array based on the 'county_code'
usort($counties, function($a, $b) {
    return $a['county_code'] - $b['county_code'];
});
?>
<style>
.card{
 
}
</style>


<div class="position-absolute top-50 start-50 translate-middle">
    <div class="card shadow-lg overflow-auto" id="card" style="width: 70rem; height: 50rem;">
        <div class="d-flex justify-content-between card-title sticky-top bg-dark rounded text-light shadow-lg">
            <h4 class='m-2'>Counties</h4>


            <a href="newcounty" type="button" class="btn btn-outline-primary m-2">Add County</a>


        </div>
        <hr />
        <div class="card-body">

            <div class="row">
                <?php if (!empty($counties) && is_array($counties)): ?>
                <?php foreach ($counties as $county_item): ?>
                <div class="col-md-4 mb-3">
                    <div class="card shadow" id="card2">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($county_item['county_code']) ?></h5>
                            <p class="card-text"><?= esc($county_item['county_name']) ?></p>
                            <button type="button" class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                </svg>
                            </button>
                            <button type="button" class="btn btn-outline-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pen" viewBox="0 0 16 16">
                                    <path
                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                <?php else: ?>
                <div class="col-md-12">
                    <h3>No Counties</h3>
                    <p>Unable to find any counties.</p>
                </div>
                <?php endif ?>
            </div>

            </tbody>
            </table>

        </div>
    </div>
</div>