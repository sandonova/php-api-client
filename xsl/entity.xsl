<xsl:stylesheet version="1.0"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:xs="http://www.w3.org/2001/XMLSchema">
    <xsl:output method="text"/>
    <xsl:strip-space elements="*"/>

    <xsl:variable name="uppercase" select="'ABCDEFGHIJKLMNOPQRSTUVWXYZ'" />
    <xsl:variable name="lowercase" select="'abcdefghijklmnopqrstuvwxyz'" />

    <xsl:template match="/">
        <xsl:apply-templates />
    </xsl:template>

    <xsl:template match="xs:schema/xs:complexType[@name != 'DateTime']">
&lt;?php
        <xsl:variable name="fullclass" select="translate(./@name, '_', '\')" />
        <xsl:variable name="namespace">
            <xsl:call-template name="substring-before-last">
                <xsl:with-param name="string1" select="$fullclass" />
                <xsl:with-param name="string2" select="'\'" />
            </xsl:call-template>
        </xsl:variable>
        <xsl:variable name="classname" select="substring($fullclass, string-length($namespace) + 2)" />
namespace <xsl:value-of select="$namespace" />;

class <xsl:value-of select="$classname" />
{
    <xsl:apply-templates>
        <xsl:with-param name="namespace" select="$namespace" />
        <xsl:with-param name="classname" select="$classname" />
    </xsl:apply-templates>
}
    </xsl:template>

    <xsl:template match="xs:schema/xs:complexType[@name != 'DateTime']/xs:all/xs:element[@name != '_type']">
        <xsl:param name="namespace" select="''" />
        <xsl:param name="classname" select="''" />
        <xsl:variable name="annotation-type">
            <xsl:call-template name="get-php-annotation-type">
                <xsl:with-param name="type" select="." />
            </xsl:call-template>
        </xsl:variable>
        <xsl:variable name="php-type">
            <xsl:call-template name="get-php-type">
                <xsl:with-param name="type" select="." />
            </xsl:call-template>
        </xsl:variable>
    /**
    * @var <xsl:value-of select="$annotation-type" /> $<xsl:value-of select="./@name" />
    */
    private $<xsl:value-of select="./@name" />;

    /**
    * @return <xsl:value-of select="$annotation-type" />
    */
    public function get<xsl:value-of select="concat(translate(substring(./@name, 1, 1), $lowercase, $uppercase), substring(./@name, 2))" />()
    {
        return $this-><xsl:value-of select="./@name" />;
    }

    /**
    * @var <xsl:value-of select="$annotation-type" /> $value
    * @return \<xsl:value-of select="$namespace" />\<xsl:value-of select="$classname" />
    */
    public function set<xsl:value-of select="concat(translate(substring(./@name, 1, 1), $lowercase, $uppercase), substring(./@name, 2))" />(<xsl:value-of select="$php-type" /> $value)
    {
        $this-><xsl:value-of select="./@name" /> = $value;

        return $this;
    }
    </xsl:template>

    <xsl:template name="get-php-annotation-type">
        <xsl:param name="element" select="."/>
        <xsl:choose>
            <xsl:when test="xs:complexType/xs:sequence/xs:element">
                <xsl:call-template name="format-php-annotation-type">
                    <xsl:with-param name="type" select="concat(translate(xs:complexType/xs:sequence/xs:element/@type, '_', '\'), '[]')" />
                </xsl:call-template>
            </xsl:when>
            <xsl:otherwise>
                <xsl:call-template name="format-php-annotation-type">
                    <xsl:with-param name="type" select="translate($element/@type, '_', '\')" />
                </xsl:call-template>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

    <xsl:template name="get-php-type">
        <xsl:param name="element" select="."/>
        <xsl:choose>
            <xsl:when test="xs:complexType/xs:sequence/xs:element">
                <xsl:call-template name="format-php-type">
                    <xsl:with-param name="type" select="concat(translate(xs:complexType/xs:sequence/xs:element/@type, '_', '\'), '[]')" />
                </xsl:call-template>
            </xsl:when>
            <xsl:otherwise>
                <xsl:call-template name="format-php-type">
                    <xsl:with-param name="type" select="translate($element/@type, '_', '\')" />
                </xsl:call-template>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

    <xsl:template name="format-php-annotation-type">
        <xsl:param name="type" select="''"/>

        <xsl:choose>
            <xsl:when test="substring-before($type, ':') = 'xs'">
                <xsl:value-of select="substring-after($type, ':')" />
            </xsl:when>
            <xsl:otherwise>
                <xsl:text>\</xsl:text><xsl:value-of select="$type" />
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

    <xsl:template name="format-php-type">
        <xsl:param name="type" select="''"/>

        <xsl:choose>
            <xsl:when test="substring-before($type, ':') = 'xs'">
                <xsl:choose>
                    <xsl:when test="contains($type, '[]')"><xsl:text>array</xsl:text></xsl:when>
                </xsl:choose>
            </xsl:when>
            <xsl:otherwise>
                <xsl:choose>
                    <xsl:when test="contains($type, '[]')"><xsl:text>array</xsl:text></xsl:when>
                    <xsl:otherwise><xsl:text>\</xsl:text><xsl:value-of select="$type" /></xsl:otherwise>
                </xsl:choose>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

    <xsl:template name="substring-before-last">
        <xsl:param name="string1" select="''" />
        <xsl:param name="string2" select="''" />

        <xsl:if test="$string1 != '' and $string2 != ''">
            <xsl:variable name="head" select="substring-before($string1, $string2)" />
            <xsl:variable name="tail" select="substring-after($string1, $string2)" />
            <xsl:value-of select="$head" />
            <xsl:if test="contains($tail, $string2)">
                <xsl:value-of select="$string2" />
                <xsl:call-template name="substring-before-last">
                    <xsl:with-param name="string1" select="$tail" />
                    <xsl:with-param name="string2" select="$string2" />
                </xsl:call-template>
            </xsl:if>
        </xsl:if>
    </xsl:template>
</xsl:stylesheet>