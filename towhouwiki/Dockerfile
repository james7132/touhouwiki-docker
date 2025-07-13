FROM mediawiki:1.39
COPY *.php .
COPY skins/common/images ./skins/common/images
RUN set -eux; \
  # Install Extensions

  ## CheckUser
  ## TODO: Extension is bundled as of MW 1.44. Remove on upgrade to 1.44+
  curl https://extdist.wmflabs.org/dist/extensions/CheckUser-REL1_39-670e484.tar.gz -o CheckUser.tar.gz; \
  tar -xzf CheckUser.tar.gz -C extensions; \
  rm CheckUser.tar.gz; \

  ## EditCount
  curl https://extdist.wmflabs.org/dist/extensions/Editcount-REL1_39-328909c.tar.gz -o EditCount.tar.gz; \
  tar -xzf EditCount.tar.gz -C extensions; \
  rm EditCount.tar.gz; \

  ## Interwiki
  curl https://extdist.wmflabs.org/dist/extensions/Interwiki-REL1_39-a2647df.tar.gz -o Interwiki.tar.gz; \
  tar -xzf Interwiki.tar.gz -C extensions; \
  rm Interwiki.tar.gz; \

  ## Renameuser
  ## TODO: Extension is merged into MediaWiki as of MW 1.40. Remove on upgrade to #1.40+
  curl https://extdist.wmflabs.org/dist/extensions/Renameuser-REL1_39-3c2e408.tar.gz -o Renameuser.tar.gz; \
  tar -xzf Renameuser.tar.gz -C extensions; \
  rm Renameuser.tar.gz; \

  ## UserMerge
  curl https://extdist.wmflabs.org/dist/extensions/UserMerge-REL1_39-227db4c.tar.gz -o UserMerge.tar.gz; \
  tar -xzf UserMerge.tar.gz -C extensions; \
  rm UserMerge.tar.gz; \

  ## CodeEditor is bundled with MediaWiki as of MW 1.31
  ## WikiEditor is bundled with MediaWiki as of MW 1.18

  ## Arrays
  curl https://extdist.wmflabs.org/dist/extensions/Arrays-REL1_39-22fd44c.tar.gz -o Arrays.tar.gz; \
  tar -xzf Arrays.tar.gz -C extensions; \
  rm Arrays.tar.gz; \

  ## CategoryTree is bundled with MediaWiki as of MW 1.31

  ## CharInsert
  curl https://extdist.wmflabs.org/dist/extensions/CharInsert-REL1_39-8c2223a.tar.gz -o CharInsert.tar.gz; \
  tar -xzf CharInsert.tar.gz -C extensions; \
  rm CharInsert.tar.gz; \

  ## Cite is bundled with MediaWiki as of MW 1.21

  ## EmbedVideo
  ## Note: It's not clear if this extension supports versions newer than 1.39.x
  ## as of writing.
  curl -L https://github.com/StarCitizenWiki/mediawiki-extensions-EmbedVideo/archive/refs/tags/v3.2.7.tar.gz -o EmbedVideo.tar.gz; \
  tar -xzf EmbedVideo.tar.gz -C extensions; \
  rm EmbedVideo.tar.gz; \

  ## InputBox is bundled with MediaWiki as of MW 1.21

  ## JavascriptSlideshow has not been updated in over 6 years
  ## Unclear if it's even compatible with 1.39.x+ versions.

  ## Labeled Section Transclusion
  curl https://extdist.wmflabs.org/dist/extensions/LabeledSectionTransclusion-REL1_39-e561a6c.tar.gz -o LabeledSectionTransclusion.tar.gz; \
  tar -xzf LabeledSectionTransclusion.tar.gz -C extensions; \
  rm LabeledSectionTransclusion.tar.gz; \

  ## OpenGraphMeta
  curl https://extdist.wmflabs.org/dist/extensions/OpenGraphMeta-REL1_39-924deb2.tar.gz -o OpenGraphMeta.tar.gz; \
  tar -xzf OpenGraphMeta.tar.gz -C extensions; \
  rm OpenGraphMeta.tar.gz; \

  ## ParserFunctions is bundled with MediaWiki as of MW 1.18

  ## RandomSelection
  curl https://extdist.wmflabs.org/dist/extensions/RandomSelection-REL1_39-f29eabf.tar.gz -o RandomSelection.tar.gz; \
  tar -xzf RandomSelection.tar.gz -C extensions; \
  rm RandomSelection.tar.gz; \

  ## Scribunto is bundled with MediaWiki as of MW 1.34

  ## SyntaxHighlight is bundled with MediaWiki as of MW 1.21

  ## TabberNeue
  curl -L https://github.com/StarCitizenTools/mediawiki-extensions-TabberNeue/archive/refs/tags/v2.1.0.tar.gz -o TabberNeue.tar.gz; \
  tar -xzf TabberNeue.tar.gz -C extensions; \
  rm TabberNeue.tar.gz; \

  ## TemplateData is bundled with MediaWiki as of MW 1.35

  ## TemplateStyles
  ## TODO: Extension is bundled as of MW 1.44. Remove on upgrade to 1.44+
  curl https://extdist.wmflabs.org/dist/extensions/TemplateStyles-REL1_39-3e1eea0.tar.gz -o TemplateStyles.tar.gz; \
  tar -xzf TemplateStyles.tar.gz -C extensions; \
  rm TemplateStyles.tar.gz; \

  ## Variables
  curl https://extdist.wmflabs.org/dist/extensions/Variables-REL1_39-14932f8.tar.gz -o Variables.tar.gz; \
  tar -xzf Variables.tar.gz -C extensions; \
  rm Variables.tar.gz; \

  ## TimedMediaHandler
  curl https://extdist.wmflabs.org/dist/extensions/TimedMediaHandler-REL1_39-172c56c.tar.gz -o TimedMediaHandler.tar.gz; \
  tar -xzf TimedMediaHandler.tar.gz -C extensions; \
  rm TimedMediaHandler.tar.gz; \

  ## AntiSpoof
  curl https://extdist.wmflabs.org/dist/extensions/AntiSpoof-REL1_39-8dd671b.tar.gz -o AntiSpoof.tar.gz; \
  tar -xzf AntiSpoof.tar.gz -C extensions; \
  rm AntiSpoof.tar.gz; \

  ## ConfirmEdit is bundled with MediaWiki as of MW 1.18
  ## hCaptcha is bundled with MediaWiki as of MW 1.18
  ## TitleBlacklist is bundled with MediaWiki as of MW 1.21

  ## CollapsibleVector
  curl https://extdist.wmflabs.org/dist/extensions/CollapsibleVector-REL1_39-4f811a1.tar.gz -o CollapsibleVector.tar.gz; \
  tar -xzf CollapsibleVector.tar.gz -C extensions; \
  rm CollapsibleVector.tar.gz; \

  ## Description2
  curl https://extdist.wmflabs.org/dist/extensions/Description2-REL1_39-2b2ef4d.tar.gz -o Description2.tar.gz; \
  tar -xzf Description2.tar.gz -C extensions; \
  rm Description2.tar.gz; \

  ## Gadgets is bundled with MediaWiki as of MW 1.18

  ## Google Analytics Integration
  ## NOTE: This extension is not currently maintained, we probably need an
  ## alternative
  curl https://extdist.wmflabs.org/dist/extensions/googleAnalytics-REL1_39-6be9453.tar.gz -o googleanalytics.tar.gz; \
  tar -xzf googleanalytics.tar.gz -C extensions; \
  rm googleanalytics.tar.gz; \

  ## HeadScript
  curl https://extdist.wmflabs.org/dist/extensions/HeadScript-REL1_39-a60d8bb.tar.gz -o HeadScript.tar.gz; \
  tar -xzf HeadScript.tar.gz -C extensions; \
  rm HeadScript.tar.gz; \

  ## LocalizationUpdate was removed entirely in 1.38.

  ## PageNotice
  curl https://extdist.wmflabs.org/dist/extensions/PageNotice-REL1_39-09b4df4.tar.gz -o PageNotice.tar.gz; \
  tar -xzf PageNotice.tar.gz -C extensions; \
  rm PageNotice.tar.gz; \

  ## TextExtracts is bundled with MediaWiki as of MW 1.34

  ## TitleKey
  curl https://extdist.wmflabs.org/dist/extensions/TitleKey-REL1_39-6b816b7.tar.gz -o TitleKey.tar.gz; \
  tar -xzf TitleKey.tar.gz -C extensions; \
  rm TitleKey.tar.gz;
