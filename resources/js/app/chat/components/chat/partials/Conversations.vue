<template>
  <div role="log" class="conversations">
    <ul class="conversation-list">
      <li class="log-divider">
        <span><i class="far fa-fw fa-comment-alt"></i> Chat started by <strong>Diane Peters</strong> &middot; Wed, Feb 14, 2018</span>
      </li>
      <li class="conversation-inbound">
        <div class="conversation-avatar">
          <a href="#" class="tile tile-circle bg-muted">
          <i class="oi oi-person"></i>
          </a>
        </div>
        <div class="conversation-message">
          <div class="conversation-message-text">Fuga quis quod voluptas mollitia aliquid alias tenetur.</div>
        </div>
        <div class="conversation-actions dropdown">
          <conversation-dropdown></conversation-dropdown>
        </div>
      </li>
      <li class="conversation-inbound conversation-faux">
        <div class="conversation-message conversation-message-skip-avatar">
          <div class="conversation-message-text">Laboriosam asperiores cupiditate aperiam!</div>
          <div class="conversation-meta">
            Diane Peters &middot; 20m
          </div>
        </div>
        <div class="conversation-actions dropdown">
          <conversation-dropdown></conversation-dropdown>
        </div>
      </li>
      <li class="conversation-outbound">
        <div class="conversation-actions dropdown">
          <conversation-dropdown></conversation-dropdown>
        </div>
        <div class="conversation-message">
          <div class="conversation-message-text">Expedita officiis delectus perspiciatis a dolores.</div>
        </div>
      </li>
      <li class="conversation-outbound conversation-faux">
        <div class="conversation-actions dropdown">
          <conversation-dropdown></conversation-dropdown>
        </div>
        <div class="conversation-message">
          <div class="conversation-message-text">Consectetur quis.</div>
          <div class="conversation-meta">
            Beni Arisandi &middot; 14m
          </div>
        </div>
      </li>
      <li class="log-divider">
        <span><i class="fa fa-fw fa-user-plus"></i> <strong>Jennifer</strong> and <strong>2 others</strong> invited to the chat &middot; 5:06 PM</span>
      </li>
      <li class="conversation-inbound">
        <div class="conversation-avatar">
          <a href="#" class="user-avatar">
          <img src="/images/profile.jpg" alt="">
          <span class="avatar-badge online"></span>
          </a>
        </div>
        <div class="conversation-message">
          <div class="conversation-message-text">Officiis numquam, repellat nam tempore sit nostrum autem excepturi quis nihil.</div>
        </div>
        <div class="conversation-actions dropdown">
          <conversation-dropdown></conversation-dropdown>
        </div>
      </li>
      <li class="conversation-inbound conversation-faux">
        <div class="conversation-message conversation-message-skip-avatar">
          <div class="conversation-message-text has-attachment">
            <div class="pswp-gallery">
              <image-attachment></image-attachment>
            </div>
          </div>
          <div class="conversation-meta">
            Jennifer Gray &middot; 13m
          </div>
        </div>
        <div class="conversation-actions dropdown">
          <conversation-dropdown></conversation-dropdown>
        </div>
      </li>
      <li class="conversation-outbound">
        <div class="conversation-actions dropdown">
          <conversation-dropdown></conversation-dropdown>
        </div>
        <div class="conversation-message">
          <div class="conversation-message-text has-attachment">
            <div class="media align-items-center">
              <span class="fa-stack fa-lg mr-1">
              <i class="fa fa-square fa-stack-2x text-white"></i>
              <i class="fa fa-file-pdf fa-stack-1x text-muted"></i>
              </span>
              <a href="#" class="media-body">double-broccoli-quinoa.pdf</a>
            </div>
          </div>
          <div class="conversation-meta">
            Beni Arisandi &middot; 5m
          </div>
        </div>
      </li>
      <li class="conversation-inbound">
        <div class="conversation-avatar">
          <a href="#" class="tile tile-circle bg-teal">ZF</a>
        </div>
        <div class="conversation-message">
          <div class="conversation-message-text">Ad earum dolore excepturi itaque officia vel fugiat quo.</div>
          <div class="conversation-meta">
            Zachary Fowler &middot; 3m
          </div>
        </div>
        <div class="conversation-actions dropdown">
          <conversation-dropdown></conversation-dropdown>
        </div>
      </li>
      <li class="log-divider">
        <span class="text-danger"><i class="oi oi-ban fa-fw"></i> The file sent by <strong>Zachary Fowler</strong> is too large &middot; 2m</span>
      </li>
      <li class="conversation-inbound">
        <div class="conversation-avatar">
          <a href="#" class="tile tile-circle bg-teal">ZF</a>
        </div>
        <div class="conversation-message">
          <div class="conversation-message-text has-attachment">
            <div class="media align-items-center">
              <span class="fa-stack fa-lg mr-1">
              <i class="fa fa-square fa-stack-2x text-muted"></i>
              <i class="fa fa-file-pdf fa-stack-1x text-white"></i>
              </span>
              <a href="#" class="media-body">Baked-Chicken-and-Spinach-Flautas.pdf</a>
            </div>
          </div>
          <div class="conversation-meta">
            Zachary Fowler &middot; Just now
          </div>
        </div>
        <div class="conversation-actions dropdown">
          <conversation-dropdown></conversation-dropdown>
        </div>
      </li>
      <li class="conversation-inbound">
        <div class="conversation-avatar">
          <a href="#" class="user-avatar">
          <img src="/images/profile.jpg" alt="">
          <span class="avatar-badge online"></span>
          </a>
        </div>
        <div class="conversation-message">
          <div class="conversation-message-text">
            <div class="typing mr-1">
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
            </div>
            <em>Jennifer Gray is typing</em>
          </div>
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
	import ConversationDropdown from './ConversationDropdown'
	import ImageAttachment from './ImageAttachment'

	export default {
		components: {
			ConversationDropdown,
			ImageAttachment
		}
	}
</script>