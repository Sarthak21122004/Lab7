<?php
  // Animal behavior data
  $animals = [
    'penguins' => [
      'name'    => 'Penguins',
      'image'   => '/Lab7/penguins.jpg',
      'alt'     => 'Emperor penguin chicks huddled together',
      'facts'   => [
        'Penguins are highly social birds that live in large colonies called rookeries, sometimes numbering in the hundreds of thousands.',
        'Emperor penguins huddle together in tight groups to conserve warmth in Antarctic temperatures that can drop to -60°C.',
        'Penguins communicate through a variety of vocalizations and body movements, and mated pairs can recognize each other\'s calls in a crowd.',
        'Penguin chicks are kept warm under their parents\' brood pouches — a fold of skin above their feet.',
        'Some penguin species, like the African penguin, are monogamous and return to the same mate year after year.',
      ],
      'category' => 'Behavior',
      'habitat'  => 'Antarctica, sub-Antarctic islands, and southern coasts',
    ],
    'puppies' => [
      'name'    => 'Puppies',
      'image'   => '/Lab7/puppies.webp',
      'alt'     => 'Two golden retriever puppies sitting in a flower field',
      'facts'   => [
        'Puppies are born with their eyes and ears sealed shut; they rely entirely on touch and smell for the first two weeks of life.',
        'Play behavior in puppies is not just fun — it is essential for developing social skills, bite inhibition, and coordination.',
        'Puppies sleep up to 18–20 hours a day, as sleep is critical for brain development and physical growth.',
        'Between 3–12 weeks is the critical socialization window: exposing puppies to different people, animals, and environments shapes their temperament for life.',
        'Dogs are one of the few animals that actively seek eye contact with humans as a form of bonding — even puppies do this instinctively.',
      ],
      'category' => 'Behavior',
      'habitat'  => 'Domestic environments worldwide',
    ],
    'cat' => [
      'name'    => 'Cats',
      'image'   => '/Lab7/Cat.jpg',
      'alt'     => 'A ginger kitten lying on its back playfully',
      'facts'   => [
        'Cats are crepuscular hunters, meaning they are most active at dawn and dusk — perfectly timed to when their prey is most active.',
        'Kneading (making biscuits) is a comfort behavior cats carry from kittenhood, when they knead their mother\'s belly to stimulate milk flow.',
        'Cats have a specialized collarbone that allows them to always land on their feet — a reflex called the "righting reflex."',
        'A cat\'s purr operates at frequencies between 25–150 Hz, which research suggests can promote bone healing and reduce stress.',
        'Cats communicate with humans in ways they don\'t use with other cats — the slow blink, for example, is a sign of trust and affection directed at people.',
      ],
      'category' => 'Behavior',
      'habitat'  => 'Domestic environments and wild territories worldwide',
    ],
  ];

  // Get requested animal, default to penguins
  $key    = isset($_GET['animal']) ? strtolower(trim($_GET['animal'])) : 'penguins';
  $animal = isset($animals[$key]) ? $animals[$key] : $animals['penguins'];

  $pageTitle = $animal['name'] . ' — Behavior';

  require_once '../includes/header.php';
?>

    <!-- Back link -->
    <div class="mb-4">
      <a href="/Lab7/index.php" class="btn btn-outline-secondary btn-sm">
        &larr; Back to Animals
      </a>
    </div>

    <!-- Animal detail section -->
    <div class="row g-5 align-items-start">

      <!-- Image -->
      <div class="col-12 col-md-4 text-center">
        <div class="animal-img-wrapper mx-auto" style="width:260px; height:260px;">
          <img src="<?php echo htmlspecialchars($animal['image']); ?>"
               class="animal-img"
               alt="<?php echo htmlspecialchars($animal['alt']); ?>" />
        </div>
        <h2 class="animal-title mt-4"><?php echo htmlspecialchars($animal['name']); ?></h2>
        <span class="badge rounded-pill bg-primary mt-1"><?php echo htmlspecialchars($animal['category']); ?></span>
        <p class="mt-2 text-muted small">
          <strong>Habitat:</strong> <?php echo htmlspecialchars($animal['habitat']); ?>
        </p>
      </div>

      <!-- Behavior facts -->
      <div class="col-12 col-md-8">
        <h3 class="fw-bold mb-4">Behavioral Facts</h3>
        <div class="d-flex flex-column gap-3">
          <?php foreach ($animal['facts'] as $index => $fact): ?>
            <div class="p-3 rounded-3" style="background: rgba(128,128,128,0.08); border-left: 4px solid #1f6feb;">
              <span class="fw-semibold me-2"><?php echo $index + 1; ?>.</span>
              <?php echo htmlspecialchars($fact); ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>

    <!-- Other animals -->
    <hr class="my-5 opacity-25" />
    <h4 class="mb-4 fw-semibold">Explore Other Animals</h4>
    <div class="row g-4">
      <?php foreach ($animals as $slug => $other):
        if ($slug === $key) continue; ?>
        <div class="col-6 col-md-4 col-lg-3">
          <a href="/Lab7/php/behavior.php?animal=<?php echo htmlspecialchars($slug); ?>"
             class="text-decoration-none">
            <div class="animal-card">
              <div class="animal-img-wrapper mx-auto" style="width:120px; height:120px;">
                <img src="<?php echo htmlspecialchars($other['image']); ?>"
                     class="animal-img"
                     alt="<?php echo htmlspecialchars($other['name']); ?>" />
              </div>
              <h6 class="animal-title mt-2" style="font-size:0.95rem;"><?php echo htmlspecialchars($other['name']); ?></h6>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

<?php require_once '../includes/footer.php'; ?>
